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