# Framgia E-Learning System

## Home

**User**

* can see his summary (follow, the number of words his memorised, etc.)
* can see the buttons "Word List" and "Start Lesson"
* can see activities (his and following users)
* can authenticate via Facebook, Twitter, Google

## Profile

**User**

* can see profile

## Profile (edit)

**User**
* can update Name, Email, Password, Avatar

## Word List

**User**

* can see word list
* can filter the list by some conditions (e.g. learned, unlearned, alphabet, category)
* can see which word has he already learned.

## Categories

**User**
* can choose a course he learns from some courses.

## Lesson

**User**

* can solve the problems (by selecting)
* can see the correct answer when he answer a question.
* can see the progress in the lesson (e.g. "3/20")

## Result

**User**

* can see the result of a lesson.

## Admin

**Admin User**

* can manage all data

----------

# Step by step

1. Design database
2. Add task on redmine + estimate time
3. Static page
4. Init model + relationship
5. Login logout
6. Other pulls

> Notice: Trừ pull về init model, còn lại các pull khác không nhiều hơn 15 files


----------


# Step to update task on redmine

1. Change Status to "In Progress", "Due date"
2. Update  "Spent time", "% Done (100)",  before send pull request to trainer 
3. if trainer COMMENT, change "% Done (80)", after that continue to fix comment else move to step 4
4. after MERGED, update task infomation "spent time", "% Done (100)", Status to "Resolved"
