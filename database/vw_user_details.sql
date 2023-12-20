CREATE VIEW vw_user_details AS
SELECT 
  U.id,
  U.EMPLOYEE_NAME,
  U.EMPLOYEE_ID,
  S.STATUS_NAME,
  D.DIVISION_NAME,
  U.EMAIL,
  SITE.SITE_NAME
FROM users U 
  LEFT JOIN statuses S 
    ON u.status_id = s.id
  LEFT JOIN divisions D 
   ON u.division_id = d.id
  LEFT JOIN sites SITE 
   ON u.site_id = site.id;