# php_blog

Requirements to Run

Clone project https://github.com/newtonanbarasu/php_blog

# In phpmyadmin
- Create 'user' table for signup

   --Column names--
   * id (Auto Increment)
   * email 
   * name  
   * password
   * gender   
   * mobile
   * image (Profile Image)

- Create 'post' table for creating post

  --Column names--  
   * post_id (Auto Increment)
   * user_id 
   * title 
   * content
   * name
   
- Create 'comments' table

  --Column names--
   * id (Auto Increment)
   * user_id 
   * post_id   
   * content
