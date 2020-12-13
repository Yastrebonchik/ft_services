minikube start --vm-driver=virtualbox
minikube addons enable metallb
eval $(minikube docker-env)
docker build -t nginx_image srcs/nginx
docker build -t ftps_image srcs/ftps
docker build -t mysql_image srcs/mysql
docker build -t wordpress_image srcs/wordpress
kubectl apply -f configmap.yaml
kubectl apply -f srcs/nginx/nginx.yaml
kubectl apply -f srcs/ftps/ftps.yaml
kubectl apply -f srcs/mysql/mysql.yaml
kubectl apply -f srcs/wordpress/wordpress.yaml