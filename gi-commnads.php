…or create a new repository on the command line
echo "# php-practice" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M master
git remote add origin https://github.com/rkumarmore/php-practice.git
git push -u origin master
                
…or push an existing repository from the command line
git remote add origin https://github.com/rkumarmore/php-practice.git
git branch -M master
git push -u origin master

git init
git remote add origin https://github.com/rkumarmore/php-practice.git
git add .
git commit -m "first commit"
git remote set-url origin https://github.com/rkumarmore/php-practice.git
git push -u origin master
