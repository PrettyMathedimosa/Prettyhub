import PyPDF2
pdffileobj = open('1.pdf','rb')
pdfreader = PyPDF2.PdffileReader(pdffileobj)
x = pdfreader.numPages
pageobj = pdfreader.getPage(x-1)
text = pageobj.extractText()

file1 = open(r"","a")
file1.writelines(text)
file1.close()
 
 