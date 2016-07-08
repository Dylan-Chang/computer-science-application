START TRANSACTION;
UPDATE StockPrice SET high = 20.50 WHERE stock_id=3 and date='2002-05-02';
UPDATE StockPrice SET high = 47.50 WHERE stock_id=4 and date='2002-05-01';
COMMIT;