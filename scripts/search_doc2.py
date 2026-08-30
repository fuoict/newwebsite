import zipfile, xml.etree.ElementTree as ET, re
docx_path = r'C:\Users\HP\Downloads\Approved School Fees and Other Fees  Aug 2026.docx'
with zipfile.ZipFile(docx_path) as z:
    with z.open('word/document.xml') as f:
        content = f.read().decode('utf-8')

# Find all occurrences of JUPEB
for m in re.finditer(r'JUPEB', content, re.IGNORECASE):
    start = max(0, m.start() - 500)
    end = min(len(content), m.end() + 1000)
    snippet = content[start:end]
    texts = re.findall(r'<w:t[^>]*>([^<]+)</w:t>', snippet)
    print(f'=== JUPEB at index {m.start()} ===')
    print(' '.join(texts))
    print()
    print('---')
