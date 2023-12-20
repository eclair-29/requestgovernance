CREATE VIEW vw_service_requests AS
SELECT 
  SR.ID
  SR.TICKET_ID,
  AT.APPLICATION_CODE,
  U.EMPLOYEE_ID,
  U.EMPLOYEE_NAME,
  A.APPROVER_NAME,
  S.STATUS_NAME,
  RT.REQUEST_TYPE_NAME,
  SR.UPDATED_AT
FROM service_requests SR 
  LEFT JOIN application_types AT
    ON SR.application_type_id = AT.id
  LEFT JOIN users U
    ON SR.user_id = U.id
  LEFT JOIN statuses S
    ON SR.status_id = S.id
  LEFT JOIN request_types RT
    ON SR.request_type_id = RT.id
  LEFT JOIN approvers A 
    ON SR.approver_id = A.id;