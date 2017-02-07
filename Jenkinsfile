pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
                sh 'composer install'
            }
        }
        stage('Test') {
            steps {
                parallel(
                    test: {
                        sh 'make test'
                    },
                    lint: {
                        sh '! find . -path ./vendor -prune -o -type f -name "*.php" -exec php -l {} \\; | grep -v "No syntax errors"'
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
