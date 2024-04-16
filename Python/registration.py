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


        title = Label(self.root,text = "Member Registration Form",font = ("monotype corsiva",30,"bold"),bd = 5,
                      relief= GROOVE,bg = "#E6005C",fg = "#000000")
        title.pack(side = TOP,fill = X)

        #member frame
        Manage_Frame = Frame(self.root,bd = 4,relief=RIDGE,BG = "#001a66")
        Manage_Frame.place(x = 20,y = 100,width=450,height=630)


if _name_ == "_main_":
    root = Tk()
    app = Registration(root)
    root.mainloop()