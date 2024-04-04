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
        self.master.title("Phatmacy Management System")
        self.master.geometry('1350X750+0+0')