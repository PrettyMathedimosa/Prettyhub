import random
import time
import datetime
from tkinter import*
from tkinter import ttk
import tkinter.messagebox

class Registration:
    def _init_(self,root):
        self.root = root
        self.root.title("Patient Registration System")
        self.root.geometry("1350X750+0+0")
        self.root.confiqure(background = "black")

        #current datetime
        Date_of_registration = StringVar()
        Date_of_registration.set(time.strftime("Xd/Xm/Xy")) 




        title = Label(self.root,text = "Member Registration Form",font = ("monotype corsiva",30,"bold"),bd = 5,
                      relief= GROOVE,bg = "#E6005C",fg = "#000000")
        title.pack(side = TOP,fill = X)

        #member frame
        Manage_Frame = Frame(self.root,bd = 4,relief=RIDGE,BG = "#001a66")
        Manage_Frame.place(x = 20,y = 100,width=450,height=630 )

        #text, label, combobox in manage frame
        Cus_title = Label(Manage_Frame,text= "Customer Details",font = ("arail",20,"bold"),bg = "#001a66",fg = "white" )
        Cus_title.grid(row = 0,columnspan = 2,pady = 5)

        member_datelbl = Label(Manage_Frame,text ="Date",font= ("arail",15,"bold"),bg ="#001a66",fg ="white")
        member_datelbl.grid(row =1,column = 0,pady = 5 ,padx = 10,sticky = "w")

        member_datetxt = Entry(Manage_Frame,font=("arail",15,"bold"),textvariable = Date_of_registration)
        member_datetxt.grid(row = 1,column = 1,pady = 5,padx = 10,sticky="w")

        member_reflbl = Label(Manage_Frame,text = "Reference ID",font = ("arial",15,"bold")
                              ,bg = "#001a66",fg = "white")
        member_reflbl.grid(row = 2,column = 0,pady= 5,padx = 10,sticky= "w")

        member_reftxt = Entry(Manage_Frame,font = ("arail",15,"bold"),state = DISABLED,TEXT = Ref)
        member_reftxt.grid(row = 2,column = 1,pady = 5,padx = 10,sticky ="w")




        #datail frame
        detail_frame = Frame(self,root,relief = RIDGE,bg ="#001a66")
        detail_frame.place(x = 500,y = 100,width= 820,height =630)




if _name_ == "_main_":
    root = Tk()
    app = Registration(root)
    root.mainloop()