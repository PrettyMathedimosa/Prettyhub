import smtplib
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText

from_addr = 'mathedimosapriity@gmail.com'
to_addr = ['pretty@gmail.com', 'mathedimosa@gmail']
msg = MIMEMultipart()
msg['From'] = from_addr
msg['To'] = " ,".join(to_addr)
msg['subject'] = 'just to check'

body = 'hello world'

msg.attach(MIMEText(body,'plain'))

email = " "
password = " "

mail = smtplib.SMTP('smtp.gmail.com',587)
mail.ehlo()
mail.startIs()
mail.login(email,password)
text = msg.as_string()
mail.sendmail(from_addr,to_addr,text)
mail.quit()

