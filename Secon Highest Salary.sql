SELECT MAX(salary) as SecondHighestSalary
FROM Employee 
WHERE salary NOT IN (SELECT Max(salary) FROM Employee); 