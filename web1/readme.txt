docker build -f dockerfile -t tutum/lamp:latest .
docker run -d -p 10000:80 tutum/lamp:latest
open http://[ip]:10000
