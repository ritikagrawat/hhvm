/*
   +----------------------------------------------------------------------+
   | HipHop for PHP                                                       |
   +----------------------------------------------------------------------+
   | Copyright (c) 2010-present Facebook, Inc. (http://www.facebook.com)  |
   +----------------------------------------------------------------------+
   | This source file is subject to version 3.01 of the PHP license,      |
   | that is bundled with this package in the file LICENSE, and is        |
   | available through the world-wide-web at the following url:           |
   | http://www.php.net/license/3_01.txt                                  |
   | If you did not receive a copy of the PHP license and are unable to   |
   | obtain it through the world-wide-web, please send a note to          |
   | license@php.net so we can mail you a copy immediately.               |
   +----------------------------------------------------------------------+
*/

#pragma once

#include <cstdint>

#include "hphp/util/assertions.h"

namespace HPHP {

///////////////////////////////////////////////////////////////////////////////

/*
 * C++ representation of various flags passed from the caller to the callee's
 * prologue used to complete a function call.
 *
 * Bit 0: flag indicating whether generics are on the stack
 * Bit 1: flag indicating whether any inout arguments were passed
 * Bit 2: flag indicating whether this is a dynamic call
 * Bits 1-31: currently unused
 * Bits 32-47: generics bitmap
 * Bits 48-63: currently unused
 */
struct CallFlags {
  enum Flags {
    HasGenerics,
    HasInOut,
    IsDynamicCall,
  };

  CallFlags(bool hasGenerics, bool hasInOut, bool isDynamicCall,
            uint32_t genericsBitmap) {
    assertx(hasGenerics || genericsBitmap == 0);
    m_bits =
      ((hasGenerics ? 1 : 0) << Flags::HasGenerics) |
      ((hasInOut ? 1 : 0) << Flags::HasInOut) |
      ((isDynamicCall ? 1 : 0) << Flags::IsDynamicCall) |
      ((uint64_t)genericsBitmap << 32);
  }

  bool hasGenerics() const { return m_bits & (1 << Flags::HasGenerics); }
  bool hasInOut() const { return m_bits & (1 << Flags::HasInOut); }
  bool isDynamicCall() const { return m_bits & (1 << Flags::IsDynamicCall); }
  int64_t value() const { return static_cast<int64_t>(m_bits); }

private:
  uint64_t m_bits;
};

///////////////////////////////////////////////////////////////////////////////

}
