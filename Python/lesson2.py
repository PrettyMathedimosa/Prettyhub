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

        self.Loginframe1 = Frame(self.frame,width = 1000,height = 300,bd = 10,relief = "groove")
        self.Loginframe1.grid(row = 0,column = 0)

        self.Loginframe2 = Frame(self.frame,width = 1000,height = 100,bd = 10,relief = "groove")
        self.Loginframe2.grid(row = 2,column = 0, pady = 15)

        self.Loginframe3 = Frame(self.frame,width = 1000,height = 200,bd = 10,relief = "groove")
        self.Loginframe3.grid(row = 6,column = 0, pady = 5)

        self.button_reg = Button(self.Loginframe3,text = "Patient registration window",font = ("arial",15,"bold"),
                                 command = self.Registration_window)
        self.button_reg.grid(row = 0, column = 0, padx = 10, pady = 10)

        self.button_hosp = Button(self.Loginframe3,text = "Patient registration window",font = ("arial",15,"bold"),
                                 command = self.Registration_window)
        self.button_hosp.grid(row = 0, column = 0, padx = 10, pady = 10)

        self.button_dr_appt = Button(self.Loginframe3,text = "Patient registration window",font = ("arial",15,"bold"),
                                 command = self.Registration_window)
        self.button_dr_appt.grid(row = 0, column = 0, padx = 10, pady = 10)

        self.button_med_stock = Button(self.Loginframe3,text = "Patient registration window",font = ("arial",15,"bold"),
                                 command = self.Registration_window)
        self.button_med_stock.grid(row = 0, column = 0, padx = 10, pady = 10)

        

        
        

