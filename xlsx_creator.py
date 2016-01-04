import xlsxwriter
from web_crawler import title


workbook = xlsxwriter.Workbook('data.xlsx')
worksheet = workbook.add_worksheet()

bold = workbook.add_format({'bold': True})

worksheet.write('A1', 'Score', bold)

row, col = 1, 0
for num in (title):
    worksheet.write(row, col, num)
    row += 1

workbook.close()