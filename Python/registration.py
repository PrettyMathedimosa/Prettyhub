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