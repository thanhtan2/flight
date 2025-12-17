# Sử dụng Nginx nhẹ để chứa trang web tĩnh
FROM nginx:alpine

# Copy toàn bộ code frontend (index.html, css, js) vào thư mục mặc định của Nginx
COPY . /usr/share/nginx/html

# Mở port 80
EXPOSE 80

# Chạy Nginx
CMD ["nginx", "-g", "daemon off;"]