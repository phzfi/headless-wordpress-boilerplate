node {
    checkout scm

    stages {
        stage('Build') {
            steps {
                echo 'Building..'

                sh 'yarn install'
                sh 'composer install'
            }
        }
        stage('Deploy') {
            steps {
                echo 'Deploying....'
            }
        }
    }
}
