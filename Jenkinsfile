pipeline {
  environment {
    dockerimagename = "454654/app-images:upload-app-v1"
    dockerImage = ""
  }
  agent any
  stages {
    stage('Checkout Source') {
      steps {
        git 'https://github.com/jijojohn1985/upload-app.git'
      }
    }
    stage('Deploying container to Kubernetes') {
      steps {
        script {
          kubernetesDeploy(configs: "upload-app.yaml")
        }
      }
    }
  }
}
