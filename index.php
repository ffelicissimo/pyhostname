import socket
if socket.gethostname().find('.')>=0:
HostName=socket.gethostname()
else:
HostName=socket.gethostbyaddr(socket.gethostname())[0]
print(HostName)
print(socket.gethostbyname(HostName))
