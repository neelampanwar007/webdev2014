#!/usr/bin/env python
# Foundations of Python Network Programming - Chapter 7 - lancelot_tests.py
# Test suite that can be run against the Lancelot servers.

from funkload.FunkLoadTestCase import FunkLoadTestCase
import socket, os, unittest, lancelot

SERVER_HOST = os.environ.get('LAUNCELOT_SERVER', 'localhost')

class TestLancelot(FunkLoadTestCase):
    def test_dialog(self):
        sock = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
        sock.connect((SERVER_HOST, lancelot.PORT))
        listanswer=[]
        listquestion=[]
        for i in range(10):
            question, answer = lancelot.qa[i % len(lancelot.qa)]
            listanswer.append(answer)
            sock.sendall(question)
            listquestion.append(question)
        reply = sock.recv(4096)
       #print "reply"
        #print reply
        while reply != '':
            c= reply.find('.')
            
            while c != -1:
                c = reply.find('.')
                
                (oneA,P,reply) = reply.partition('.')
                for i in range(10):
                    if listquestion[i]==listanswer[1]: 
                        self.assertEqual(oneA+'.', answer)
                
        sock.close()

if __name__ == '__main__':
    unittest.main()
