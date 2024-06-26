from time import time

#calculate accuracy of input prompt

def tperror(prompt):
    global inwords

    words = prompt.split()
    errors = 0

    for i in range(len(inwords)):
        if i in (0, len(inwords) - 1):
            if inwords[i] == words[i]:
                continue
            else:
                errors = errors + 1
        else:
            if inwords[i] == words[i]:
                if(inwords[i+1]) == words[i+1] & (inwords[i+1] == words[i-1]):
                    continue
                else:
                    errors += 1
            else:
                errors += 1
    return errors

#calculate speed of typing words per minutes
def speed(inprompt, starttime ,endtime):
    global time
    global inwords

    inwords = inprompt.split()
    twords = len(inwords)
    speed = twords / time

    return speed

#claculate the total elaped time
def elaspsedtime(starttime,endtime):
    time = endtime - starttime
    return time

if __name__ == '_main_':
    prompt = "Python is an interpreter, high-level, general-purpose programming language"
    print("Type this:-",prompt,"")

    #checking to input enter basically it will see
    input("Press enter when you are ready to check your speed")

    #record the time for input
    starttime = time()
    inprompt = input()
    endtime = time()

    #collect all information returned by the function
    time = round(elapsedtime(starttime,endtime),2)
    speed = speed(inprompt,starttime,endtime)
    errors = tperror(prompt)

    #printing all required data
    print("Total time elapsed: ",time,"seconds")
    print("Average typing speed was ", speed, "words per minutes")
    print("with the total of ",errors, "errors")



