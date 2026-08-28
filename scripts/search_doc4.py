import zipfile, re
docx_path = r'C:\Users\HP\Downloads\Approved School Fees and Other Fees  Aug 2026.docx'
with zipfile.ZipFile(docx_path) as z:
    with z.open('word/document.xml') as f:
        content = f.read().decode('utf-8')

# Find JUPEB and look at raw XML for tables after it
idx = content.lower().find('jupeb')
if idx >= 0:
    # Get everything from JUPEB to end of document (or 5000 chars)
    snippet = content[idx:idx+5000]
    # Count tables
    tables = re.findall(r'<w:tbl>', snippet)
    print(f'Tables found after JUPEB: {len(tables)}')
    # Get all text
    texts = re.findall(r'<w:t[^>]*>([^<]+)</w:t>', snippet)
    print('Text after JUPEB:')
    print(' '.join(texts[:100]))
