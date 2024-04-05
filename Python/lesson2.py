import random
import time
import datetime
from tkinter import * 
from tkinter import ttk
import tkinter.messagebox

def main():
    root = Tk()
    app = windows1(root)
    root.mainloop()

class windows1:
    def _init_(self,master):
        self.master = master
        self.master.title("Pharmacy Management System ")
        self.master.geometry('1350X750+0+0')
        self.frame = Frame(self.master)
        self.frame.pack()

        self.LabelTitle = Label(self.frame,text = "Pharmacy Management Sytem",font = ("arial",40,"bold"),
            bd = 10,relief = "sunken")
        self.LabelTitle.grid(row = 0,column = 0,columnspan = 2,pady = 20)

class windows2:
    def _init_(self,master):
        self.master = master
        self.master.title("Patient Management System")
        self.master.geometry('1350X750+0+0')
        self.frame = Frame(self.master)
        self.frame.pack()


class windows3:
    def _init_(self,master):
        self.master = master
        self.master.title("Hospital Management System")
        self.master.geometry('1350X750+0+0')
        self.frame = Frame(self.master)
        self.frame.pack()


class windows4:
    def _init_(self,master):
        self.master = master
        self.master.title("Doctor Management System")
        self.master.geometry('1350X750+0+0')
        self.frame = Frame(self.master)
        self.frame.pack()


class windows5:
    def _init_(self,master):
        self.master = master
        self.master.title("Medicine System")
        self.master.geometry('1350X750+0+0')
        self.frame = Frame(self.master)
        self.frame.pack()









        self.LabelTitle = Label(self.frame,text = "Pharmacy Management System",font =("arial",40,"bold"),
                                bd = 10,relief ="sunken")
        self.LabelTitle.grid(row = 0,column =0,columnspan =2,pady=20)

        self.Loginframe1 = frame(self.frame,width = 100,height = 200,bd = 10,relief = "groove")
        self.Loginframe1.grid(row = 0,column = 0)

        
        

