CREATE TABLE todolist(
TaskID Int AUTO_INCREMENT,
TaskName Char(45),
TaskDesc Varchar(500),
DueDate Date,
PRIMARY KEY(TaskID));


INSERT INTO todolist (TaskID, TaskName, TaskDesc, DueDate)
 VALUES (NULL, 'Senior Project', 'This class will likely require a tremendous amount of
 work out of you.  Completing this course as intended will guarantee that your skill set
 and employer desirability will grow. While, it is unknown at this point which projects 
 each of you will be assigned, there are a few common themes. The largest of which is that
 you need to learn how to use new tools/technology/languages to solve real-world problems. 
 It is likely that most of you will be working with languages that you have never used 
 before. This should be an exciting prospect and gives you the chance to grow your skills
 and resume.', '2017-12-11');
 
INSERT INTO todolist (TaskID, TaskName, TaskDesc, DueDate) 
 VALUES (NULL, 'Shopping', 'Buy new clothes for the new semester', '2017-09-10');
 
INSERT INTO todolist (TaskID, TaskName, TaskDesc, DueDate)
 VALUES (NULL, 'Groceries', 'Buy milk, snacks, juice, bread, etc..', '2017-09-05');
 
INSERT INTO todolist (TaskID, TaskName, TaskDesc, DueDate)
 VALUES (NULL, 'Web Development', 'Welcome to CSC 3750 Introduction to Web Technologies.
 This is an on-line course. I will be posting new material every week on Wednesday around
 noon.  First lecture will be posted on August 30 with more details about the course and
 the syllabus.This may be the first on-line course for some of you. Online courses are 
 different than the in-class courses both on how the content is delivered and what is
 expected out of the student. As in any on-line class you need to invest your time in going
 throuhg the material i.e watching vidoes, reading notes and taking quizes etc. You can learn
 at your own pace but you need to make sure that you do not fall behind. Most of the
 assignments build on each other so missing a weeks work will not be very helpful.', '2017-12-13');