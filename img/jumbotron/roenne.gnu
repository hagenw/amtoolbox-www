#!/usr/bin/gnuplot
#
# <+DESCRIPTION+>
#
# AUTHOR: Hagen Wierstorf
# gnuplot 4.6 patchlevel 0

reset

# wxt
set terminal wxt size 650,350 enhanced font 'Verdana,12' persist
# png
set terminal pngcairo size 650,350 enhanced font 'Verdana,12'
set output 'roenne.png'

# color definitions
set border linewidth 1.5
set style line 1 lc rgb '#0060ad' lt 1 lw 2 pt 6 # --- blue
set style line 2 lc rgb '#007cad' lt 1 lw 2 pt 10 # --- red
set style line 3 lc rgb '#0099ad' lt 1 lw 2 pt 12 # --- grey
set style line 4 lc rgb '#00ada4' lt 1 lw 2 pt 3 # --- lightgrey
set style line 5 lc rgb '#00ad88' lt 1 lw 2 pt 2
set style line 6 lc rgb '#00ad6b' lt 1 lw 2 pt 1
set style line 7 lc rgb '#00ad4e' lt 1 lw 2 pt 8
set style line 11 lc rgb 'gray80' lt 1 lw 1 pt 7 
set style line 12 lc rgb 'gray30' lt 1 lw 2 pt 7

set key top right

# Axes
set style line 111 lc rgb '#808080' lt 1
set border 3 back ls 111
set tics nomirror out scale 0.75
# Grid
set style line 112 lc rgb'#808080' lt 0 lw 1
set grid back ls 112

set logscale x
set xrange [800:16000]
set yrange [5.5:12.5]
set ylabel 'Latency of wave V / ms'
set xlabel 'Frequency of toneburst / kHz'
set xtics ('1' 1000,'1.5' 1500,'2' 2000,'3' 3000,'6' 6000,'8' 8000)
set ytics 1

set label 1 'Click' at 10000,8 tc ls 12
set label 2 '95.2' at 13e3,5.88 tc ls 12
set label 3 '75.2' at 13e3,6.59 tc ls 12
set label 4 '55.2' at 13e3,7.6 tc ls 12
plot "<echo '12e3 5.9'" notitle w p ls 12, \
     "<echo '12e3 6.6'" notitle w p ls 12, \
     "<echo '12e3 7.6'" notitle w p ls 12, \
     'neely.txt'  u 1:2 notitle w l ls 1 lw 1, \
     ''           u 1:3 notitle w l ls 2 lw 1, \
     ''           u 1:4 notitle w l ls 3 lw 1, \
     ''           u 1:5 notitle w l ls 4 lw 1, \
     ''           u 1:6 notitle w l ls 5 lw 1, \
     ''           u 1:7 notitle w l ls 6 lw 1, \
     ''           u 1:8 notitle w l ls 7 lw 1, \
     'harte.txt'  notitle w l ls 12, \
     'roenne.txt' i 0 u 1:2 w p t '40 dB' ls 1, \
     ''           i 0 u 1:3 w p t '50 dB' ls 2, \
     ''           i 0 u 1:4 w p t '60 dB' ls 3, \
     ''           i 0 u 1:5 w p t '70 dB' ls 4, \
     ''           i 0 u 1:6 w p t '80 dB' ls 5, \
     ''           i 0 u 1:7 w p t '90 dB' ls 6, \
     ''           i 0 u 1:8 w p t '100 dB' ls 7, \
     ''           i 1 u 1:2 notitle w lp ls 1, \
     ''           i 1 u 1:3 notitle w lp ls 2, \
     ''           i 1 u 1:4 notitle w lp ls 3, \
     ''           i 1 u 1:5 notitle w lp ls 4, \
     ''           i 1 u 1:6 notitle w lp ls 5, \
     ''           i 1 u 1:7 notitle w lp ls 6, \
     ''           i 1 u 1:8 notitle w lp ls 7
