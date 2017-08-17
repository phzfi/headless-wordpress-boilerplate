node {
    checkout scm

    stage('Build') {
        echo 'Building..'

        sh 'yarn install'
        sh 'composer install'
    }
    stage('Deploy') {
        echo 'Deploying....'
    }
}
