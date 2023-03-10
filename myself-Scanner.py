import socket
#note
srv_ip = input("Nhap IP: ")
srv_port = int(input("Nhap Port: "))

s=socket.socket(socket.AF_INET, socket.SOCK_STREAM)
s.bind((srv_ip, srv_port))
s.listen(1)

print("Server start, waiting:....")
connection, address = s.accept()

print("client connected: ", address)

while 1:
    data=connection.recv(1024)
    if not data:
        break
    connection.sendall("[+] Message receive ")
    print(data.decode('utf-8'))
connection.close


