<!--
id: 32794588059
link: http://blog.hengkiardo.com/post/32794588059/convert-simple-array-into-two-dimensional
slug: convert-simple-array-into-two-dimensional
date: Wed Oct 03 2012 14:37:14 GMT+0700 (WIT)
publish: 2012-10-03
tags: javascript, array, coding
title: Convert simple array into two-dimensional array(matrix) in javascript
-->


    function listToMatrix(list, elementsPerSubArray) {
        var matrix = [],
            i, k;
        for (i = 0, k = -1; i < list.length; i++) {
            if (i % elementsPerSubArray === 0) {
                k++;
                matrix[k] = [];
            }
            matrix[k].push(list[i]);
        }
        return matrix;
    }

    //listToMatrix(array , 2);

