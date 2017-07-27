FROM nginx:latest
RUN echo "<!DOCTYPE html>" > /var/www/html/index.html
RUN echo "<html>" >> /var/www/html/index.html
RUN echo "  <head>" >> /var/www/html/index.html
RUN echo "    <meta charset=\"utf-8\">" >> /var/www/html/index.html
RUN echo "    <title>Prueba</title>" >> /var/www/html/index.html
RUN echo "  </head>" >> /var/www/html/index.html
RUN echo "  <body>" >> /var/www/html/index.html
RUN echo "    <h1>Hola Mundo</h1>" >> /var/www/html/index.html
RUN echo "    <br>" >> /var/www/html/index.html
RUN echo "    Version 1" >> /var/www/html/index.html
RUN echo "  </body>" >> /var/www/html/index.html
RUN echo "</html>" >> /var/www/html/index.html
