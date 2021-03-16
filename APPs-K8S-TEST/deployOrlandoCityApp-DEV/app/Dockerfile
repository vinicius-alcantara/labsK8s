FROM nginx:latest
LABEL maintainer="vinicius alcantara"
WORKDIR /usr/share/nginx/html
RUN rm -rf index.html
COPY . .
EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]