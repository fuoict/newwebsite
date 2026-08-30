import zipfile, re
docx_path = r'C:\Users\HP\Downloads\Approved School Fees and Other Fees  Aug 2026.docx'
with zipfile.ZipFile(docx_path) as z:
    with z.open('word/document.xml') as f:
        content = f.read().decode('utf-8')

# Find JUPEB and get a larger window
for m in re.finditer(r'JUPEB', content, re.IGNORECASE):
    start = max(0, m.start() - 200)
    end = min(len(content), m.end() + 3000)
    snippet = content[start:end]
    texts = re.findall(r'<w:t[^>]*>([^<]+)</w:t>', snippet)
    print('=== JUPEB SECTION ===')
    print(' '.join(texts))
    print()

# Also search for FOUNDATION
for m in re.finditer(r'FOUNDATION', content, re.IGNORECASE):
    start = max(0, m.start() - 200)
    end = min(len(content), m.end() + 2000)
    snippet = content[start:end]
    texts = re.findall(r'<w:t[^>]*>([^<]+)</w:t>', snippet)
    print('=== FOUNDATION SECTION ===')
    print(' '.join(texts))
    print()
