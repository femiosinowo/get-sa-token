FROM centos/php-73-centos7

MAINTAINER Your Name "DevOps"

EXPOSE 8000


COPY . /opt/app-root/src
USER root
RUN chmod +x /opt/app-root/src/get-sa-token.sh
COPY --from=lachlanevenson/k8s-kubectl:v1.10.3 /usr/local/bin/kubectl /usr/local/bin/kubectl

USER 1001


CMD /bin/bash -c 'php -S 0.0.0.0:8000'
