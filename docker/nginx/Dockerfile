FROM nginx:1.19

RUN apt-get update -y

# RUN apt-get install -y openssl
# RUN openssl genrsa 2048 > server.key
# RUN openssl req -new -key server.key -subj "/C=JP/ST=Tokyo/L=Chuo-ku/O=RMP Inc./OU=web/CN=localhost" > server.csr
# RUN openssl x509 -in server.csr -days 3650 -req -signkey server.key > server.crt
# RUN cp server.crt /etc/nginx/server.crt
# RUN cp server.key /etc/nginx/server.key
# RUN chmod 400 /etc/nginx/server.key

COPY ssl/*.crt /etc/nginx
COPY ssl/*.key /etc/nginx