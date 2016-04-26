head(order_btcusd)
order_btcusd$pcolor[order_btcusd$type=="ASK"] <-"blue"
order_btcusd$pcolor[order_btcusd$type=="BID"] <-"red"
with(order_btcusd,{
  scatterplot3d(dt,price,size,
                     color= pcolor, pch=10,
                     type="h", lty.hplot = 2,
                     scale.y = 0.70,
                     xlab="dt",
                     ylab = "Price",
                     zlab="Size",
                     main="3D Scatterplot ask")
  legend("topleft",insert=0.05, cex=0.5,
         title="order",
         c("AsK","BID",), fill=c("blue","red"))
  })