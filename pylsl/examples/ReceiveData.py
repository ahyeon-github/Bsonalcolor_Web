"""Example program to show how to read a multi-channel time series from LSL."""

from pylsl import StreamInlet, resolve_stream
import csv
import sys
import time

#!C:\Users\사용자\AppData\Local\Programs\Python\Python39\python.exe



def main(color):
    
    # first resolve an EEG stream on the lab network
    print("looking for an EEG stream...")
    streams = resolve_stream('type', 'EEG')

    # create a new inlet to read from the stream
    inlet = StreamInlet(streams[0])

    # file namae
    with open(color+'.csv', 'w', newline='') as csvfile:
        spamwriter = csv.writer(csvfile, delimiter=' ',
                                quotechar='|', quoting=csv.QUOTE_MINIMAL)
        
        count = 0
        # 시간 5초 설정 -> 5초마다 색상 변경 csv 파일 생성 
        t = time.time()
        while True:
            # get a new sample (you can also omit the timestamp part if you're not
            # interested in it)


            sample, timestamp = inlet.pull_sample()
            spamwriter.writerow([timestamp, sample])
            print(timestamp, sample)
            
            ti = time.time()
            if (ti-t) >= 5:
                break            

    


if __name__ == '__main__':
    main(sys.argv[1])
