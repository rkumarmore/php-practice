SELECT r.* FROM random r
WHERE (
  SELECT COUNT(*) FROM random r1
  WHERE r.category = r1.category AND r.id < r1.id
) <= 2
ORDER BY r.category ASC, RAND()