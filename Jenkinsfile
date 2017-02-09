pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
                sh 'make install'
            }
        }
        stage('Test') {
            steps {
                parallel(
                    unit: {
                        sh 'make test'
                    },
                    lint: {
                        sh 'make lint'
                    }
                )
            }
        }
        stage('Deploy') {
            steps {
                echo 'Deploying...'
            }
        }
    }
}
