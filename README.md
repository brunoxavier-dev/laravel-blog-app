
# Docker + Laravel

git clone https://github.com/brunoxavier-dev/laravel-blog-app.git
docker-compose up --build -d
docker-compose -f docker-compose.yml run --publish 5173:5173 npm run dev
