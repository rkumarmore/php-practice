git init
git remote add origin https://github.com/rkumarmore/python-practice.git
git pull origin master 
or 
git push origin master




…or create a new repository on the command line
git init
git add README.md
git commit -m "first commit"
git branch -M master
git remote add origin https://github.com/rkumarmore/php-practice.git
git push -u origin master
                
…or push an existing repository from the command line

# from local machine
git init
git remote add origin https://github.com/rkumarmore/php-practice.git
git add .
git commit -m "first commit"
git branch -M master
git push --set-upstream origin main

#if gitignore is not working
git rm -r --cached .
git add .
git commit -m "fixed untracked files"