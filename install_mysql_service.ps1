$base = 'C:\Program Files\MySQL\MySQL Server 8.4'
$data = 'C:\Users\USER\AppData\Local\MySQLData'
$iniPath = Join-Path $data 'my.ini'
$serviceName = 'MySQL84'

if (-not (Test-Path $data)) {
    New-Item -ItemType Directory -Path $data -Force | Out-Null
}

$config = @"
[mysqld]
basedir=$base
datadir=$data
port=3306
lc-messages-dir=$base\share
plugin-dir=$base\lib\plugin
log-error=$data\mysql-error.log
pid-file=$data\mysqld.pid
socket=$data\mysql.sock
character-set-server=utf8mb4
collation-server=utf8mb4_unicode_ci
"@
Set-Content -Path $iniPath -Value $config -Encoding ASCII

Write-Output "Config written to $iniPath"

# stop service if already installed
if (Get-Service -Name $serviceName -ErrorAction SilentlyContinue) {
    Stop-Service -Name $serviceName -Force -ErrorAction SilentlyContinue
    & "$base\bin\mysqld.exe" --remove $serviceName
}

Write-Output "Installing service $serviceName..."
& "$base\bin\mysqld.exe" --install $serviceName --defaults-file="$iniPath"

Set-Service -Name $serviceName -StartupType Automatic
Start-Service -Name $serviceName

Write-Output "Service status:"
sc.exe query $serviceName | Write-Output

Write-Output "MySQL port status:"
netstat -ano | Select-String ':3306' | Write-Output
