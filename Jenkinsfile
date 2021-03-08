env.DOCKER_REGISTRY = 'vanillavladimir'
env.DOCKER_IMAGE_NAME = 'landing_page'
node('master') {
    stage('Clean Workspace') {
      cleanWs()
    }
    stage('Git Pull from Github') {
        sh "git clone https://github.com/geraldGhibran/small-project-3-cilsy.git"
    }
    stage('Build Docker Image') {
        sh "cd small-project-3-cilsy/landingpage/landing-page && docker build --build-arg APP_NAME=landing-page -t $DOCKER_REGISTRY/$DOCKER_IMAGE_NAME:${BUILD_NUMBER} ."   
    }
    stage('Push Docker Image to Dockerhub') {
        sh "docker push $DOCKER_REGISTRY/$DOCKER_IMAGE_NAME:${BUILD_NUMBER}"
    }
    stage('DeployTo Kubernetes Cluster') {
        sh "kubectl delete namespace landing-page-production"
        sh "kubectl create namespace landing-page-production"
        sh "kubectl replace -f small-project-3-cilsy/landingpage/landing-page-production-ssl.yml --force"
        sh'''cd small-project-3-cilsy/landingpage && sed -i "39d" landing-page-production.yml'''
        sh'''cd small-project-3-cilsy/landingpage && sed -i "38 a \'\\'        image: vanillavladimir/landing_page:${BUILD_NUMBER}" landing-page-production.yml && sed -i "s/''//" landing-page-production.yml'''
        sh "cd small-project-3-cilsy/landingpage && kubectl replace -f landing-page-production.yml --force"
   }
    stage('Remove Docker Image') {
        sh "docker rmi $DOCKER_REGISTRY/$DOCKER_IMAGE_NAME:${BUILD_NUMBER}"   
    }
    stage('Clean Workspace') {
      cleanWs()
    }
}