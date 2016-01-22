START TRANSACTION;
UPDATE StockPrice SET close_v = 45.50 WHERE stock_id=4 and date='2002-05-01';
UPDATE StockPrice SET close_v = 19.50 WHERE stock_id=3 and date='2002-05-02';
COMMIT;

