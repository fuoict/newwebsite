import zipfile, xml.etree.ElementTree as ET, re
docx_path = r'C:\Users\HP\Downloads\Approved School Fees and Other Fees  Aug 2026.docx'
with zipfile.ZipFile(docx_path) as z:
    with z.open('word/document.xml') as f:
        content = f.read().decode('utf-8')
for term in ['JUPEB', 'jupeb', 'FOUNDATION', 'DIPLOMA DAIS', 'Diploma', 'PART  TIME', 'PART-TIME']:
    if term.lower() in content.lower():
        idx = content.lower().find(term.lower())
        start = max(0, idx - 300)
        end = min(len(content), idx + 500)
        snippet = content[start:end]
        texts = re.findall(r'<w:t[^>]*>([^<]+)</w:t>', snippet)
        print(f'=== Found "{term}" ===')
        print(' '.join(texts))
        print()
