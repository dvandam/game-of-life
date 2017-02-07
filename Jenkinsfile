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
                        sh '! find . -type f -name "*.php" -exec php -l {} \\; | grep -v "No syntax errors"'
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
