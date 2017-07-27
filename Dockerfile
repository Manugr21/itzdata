FROM nginx:latest
RUN echo "<!DOCTYPE html>" > /usr/share/nginx/html/index.html
RUN echo "<html>" >> /usr/share/nginx/html/index.html
RUN echo "  <head>" >> /usr/share/nginx/html/index.html
RUN echo "    <meta charset=\"utf-8\">" >> /usr/share/nginx/html/index.html
RUN echo "    <title>Prueba</title>" >> /usr/share/nginx/html/index.html
RUN echo "  </head>" >> /usr/share/nginx/html/index.html
RUN echo "  <body>" >> /usr/share/nginx/html/index.html
RUN echo "    <h1>Hola Mundo</h1>" >> /usr/share/nginx/html/index.html
RUN echo "    <br>" >> /usr/share/nginx/html/index.html
RUN echo "    Version 1" >> /usr/share/nginx/html/index.html
RUN echo "  </body>" >> /usr/share/nginx/html/index.html
RUN echo "</html>" >> /usr/share/nginx/html/index.html
