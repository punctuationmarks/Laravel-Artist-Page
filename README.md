

Wanted to see what was happening in PHP's web development with Laravel so I built this simple artist gallery page. 

Straight forward site for an artist to show current and up-to-date photos
and commnetary on their work. CRUD app with photo features with passwordless sign in
for ease of use and to avoid security issues. 


_Development was focused on Firefox, so might not render properly through Heroku otherwise_
- Testing site [here](http://jack-georgopolus.herokuapp.com/)  deployed on Heroku



# !! Known bug: 
After signing in and uploading photos, the photos disappear after the heroku's servers shutdown
This was not seen on the AWS Elastic Beanstalk build, but there might be an issue with how the photos are routed
and stored. Either way, use at your own risk, will probably not attempt to find the bug since I haven't coded in PHP since 2019.

