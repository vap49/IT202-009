ALTER TABLE Products ADD COLUMN Cart_Id BIGINT
not null 
COMMENT "The Specific Cart Associated with the item"