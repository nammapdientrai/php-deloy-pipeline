pipeline {
    agent any

    stages {
        stage ('Check container JDK') {
            steps {
                if [ ! "$(docker ps -q -f name=java-jdk)" ]; then
                    if [ "$(docker ps -aq -f status=exited -f name=java-jdk)" ]; then
                        docker rm java-jdk
                    fi
                    
                    docker run -d --name java-jdk openjdk;
                fi
            }
        }

        stage ('2') {
            steps {
                echo '2 ....'
            }
        }

        stage ('3') {
            steps {
                echo '3 ....'
            }
        }
    }
}
