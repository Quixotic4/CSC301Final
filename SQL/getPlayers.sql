SELECT *
FROM player
WHERE team = :team
ORDER BY goalsscored DESC;
