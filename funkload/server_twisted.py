#!/usr/bin/env python
# Foundations of Python Network Programming - Chapter 7 - server_twisted.py
# Using Twisted to serve Lancelot users.

from twisted.internet.protocol import Protocol, ServerFactory
from twisted.internet import reactor
import lancelot

class Lancelot(Protocol):
    def connectionMade(self):
        self.question = ''

    def dataReceived(self, data):
        #while data != '':
        self.question += data
        i= self.question.find('?',0)
        while i !=-1:
            i= self.question.find('?',0)
            (question,P,self.question) = self.question.partition('?')
            #Listquestion[]=Listquestion.append(question+'?')
            if (question != ''):
                self.transport.write(dict(lancelot.qa)[question+'?'])
        #self.question = ''

factory = ServerFactory()
factory.protocol = Lancelot
reactor.listenTCP(1069, factory)
reactor.run()
